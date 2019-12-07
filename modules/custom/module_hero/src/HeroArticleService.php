<?php

namespace Drupal\module_hero;

use Drupal\Core\Entity\Query\QueryFactory;
use Drupal\Core\Entity\EntityTypeManagerInterface;
/**
 * Our Hero article service class.
 */
class HeroArticleService {

  private $entityQuery;
  private $entityManager;

  public function __construct(QueryFactory $entityQuery, EntityTypeManagerInterface $entityManager){
    $this->entityQuery = $entityQuery;
    $this->entityManager = $entityManager;
  }

  /**
   * Method for getting articles regarding heroes.
   *  Use \Drupal\Core\Entity\EntityTypeManagerInterface::getStorage() instead.
   */

    public function getHeroArticles() {
      $articleNids = $this->entityQuery->get('node')->condition('type', 'product')->execute();

      return $this->entityManager->getStorage('node')->loadMultiple($articleNids);
    }
  }
