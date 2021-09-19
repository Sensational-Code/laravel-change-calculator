<?php

namespace App\Models;

class TenderList
{
  protected $list = [];

  public function calculate(CurrencyDenomination $currency, $change) {

    $denominations = $currency->denominations;
    $changeRemaining = $change;

    foreach ($denominations as $denomination) { 
        if ($changeRemaining >= $denomination) {
          // Find out how many times this denomination fits in the remaining change
          $denominationCount = floor($changeRemaining / $denomination);

          // Update the tender list with the above denomination
          $this->addTender($denomination, $denominationCount);

          // Update the remaining change
          $changeRemaining = $changeRemaining % $denomination;
        }
      }
  }

  public function addTender($denomination, $count)
  {
    array_push($this->list, [
      'denomination' => $denomination,
      'count'        => $count
    ]);
  }

  public function isEmpty() {
    return empty($this->list);
  }

  public function getList() {
    return $this->list;
  }

  public function toJSON() {
    return json_encode($this->list);
  }
}
