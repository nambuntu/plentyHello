<?php

namespace PlentyHello\Controllers;

use Plenty\Modules\Item\DataLayer\Contracts\ItemDataLayerRepositoryContract;
use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;

/**
 * Class ContentController
 *
 * @package PlentyHello\Controllers
 */
class ContentController extends Controller {
  /**
   * @param Twig $twig
   *
   * @return string
   */
  public function sayHello(Twig $twig): string {
    return $twig->render('PlentyHello::content.hello');
  }

  public function showTopItems(Twig $twig, ItemDataLayerRepositoryContract $itemRepository): string {
    $itemColumns = [
      'itemDescription' => [
          'name1',
          'description'
      ],
      'variationBase' => [
          'id'
      ],
      'variationImageList' => [
          'path',
          'cleanImageName'
      ]
    ];

    $itemFilter = [
      'itemBase.isStoreSpecial' => [
          'shopAction' => [3]
      ]
    ];

    $itemParams = [
        'language' => 'en'
    ];

    $resultItems = $itemRepository->search($itemColumns, $itemFilter, $itemParams);

    $items = [];
    foreach ($resultItems as $item) {
      $items[] = $item;
    }
    $templateData = [
        'resultCount' => $resultItems->count(),
        'currentItems' => $items
    ];

    return $twig->render('PlentyHello::content.TopItems', $templateData);
  }
}
