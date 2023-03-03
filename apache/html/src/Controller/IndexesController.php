<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry; //他テーブル情報取得

/**
 * Indexes Controller
 *
 *
 * @method \App\Model\Entity\Index[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class IndexesController extends AppController
{

    /**
     * another table
     *
     */
    public function initialize(){
        parent::initialize();
        $this->movies = TableRegistry::getTableLocator()->get("movies");
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
      $query = $this->movies->find('all')->contain(['Users']);
      $this->set('movies', $query);
    }
}
