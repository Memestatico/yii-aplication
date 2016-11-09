<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Categoria;

class CategoriaController extends Controller
{
    public function actionIndex()
    {
        $query = Categoria::find();
        
        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);
        
        $categorias = $query->orderBy('nomecate')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
            
            return $this->render('index', [
                'categorias' => $categorias,
                'pagination' => $pagination,
            ]);
    }
}