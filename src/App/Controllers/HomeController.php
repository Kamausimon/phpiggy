<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;
//import the paths class here
use App\Services\TransactionService;
use App\Config\Paths;

class HomeController
{


   public function __construct(private TemplateEngine $view, private TransactionService $transactionService)
   {
      // the template engine points to the paths that contains constant VIEW

   }

   public function Home()
   {
      $transactions = $this->transactionService->getUserTransactions();
      echo  $this->view->render("/index.php", [
         'title' => 'Expense Tracker App', 'transactions' => $transactions
      ]);
   }
}
