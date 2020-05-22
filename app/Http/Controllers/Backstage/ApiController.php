<?php

namespace App\Http\Controllers\Backstage;

use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Carousel;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductGallery;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use App\Models\Links;
use Illuminate\Routing\Controller as BaseController;

class ApiController extends BaseController
{
    /*
     * json格式
     *
     * 接收
     * {
     *      of: "link",
     *      data: {
     *          id: 1,
     *          value: 350
     *      }
     * }
     *
     * 返回
     * {
     *      code: 200,
     *      message: "ok",
     *      result: {
     *          id: 1
     *          name: "名字"
     *      }
     * }
     *
     * */
    public function isShow(Request $request)
    {
        $origin = json_decode($request->getContent(),true);
        $data = $origin['data'];
        $result = '';
        switch ($origin['of']){
            case 'carousel':
                $result = $this->setIsShow(Carousel::class, $data['id']);
                break;
            case 'article':
                $result = $this->setIsShow(Article::class, $data['id']);
                break;
            case 'articleCategory':
                $result = $this->setIsShow(ArticleCategory::class, $data['id']);
                break;
            case 'product':
                $result = $this->setIsShow(Product::class, $data['id']);
                break;
            case 'productCategory':
                $result = $this->setIsShow(ProductCategory::class, $data['id']);
                break;
            case 'link':
                $result = $this->setIsShow(Links::class, $data['id']);
                break;

        }
        return $this->ok($result);
    }

    public function sort(Request $request)
    {
        $origin = json_decode($request->getContent(),true);
        $data = $origin['data'];
        $result = '';
        switch ($origin['of']){
            case 'carousel':
                $result = $this->setSort(Carousel::class, $data['id'], $data['value']);
                break;
            case 'article':
                $result = $this->setSort(Article::class, $data['id'], $data['value']);
                break;
            case 'articleCategory':
                $result = $this->setSort(ArticleCategory::class, $data['id'], $data['value']);
                break;
            case 'product':
                $result = $this->setSort(Product::class, $data['id'], $data['value']);
                break;
            case 'productCategory':
                $result = $this->setSort(ProductCategory::class, $data['id'], $data['value']);
                break;
            case 'link':
                $result = $this->setSort(Links::class, $data['id'], $data['value']);
                break;
            case 'gallery':
                $result = $this->setGallerySort($data['firId'], $data['firSort'], $data['secId'], $data['secSort']);
                break;
        }
        return $this->ok($result);
    }

    private function ok($result) {
        return response()->json(['code' => Response::HTTP_OK, 'message' => 'ok', 'result' => $result]);
    }

    private function setIsShow($clazz, $id){
        $model = $clazz::find($id);
        $model->is_show = $model->is_show ? 0 : 1;
        return $model->save();
    }

    private function setSort($clazz, $id, $value) {
        $model = $clazz::find($id);
        $model->sort = $value;
        return $model->save();
    }

    private function setGallerySort($firId, $firSort, $secId, $secSort){
        $firGallery = ProductGallery::find($firId);
        $secGallery = ProductGallery::find($secId);
        $firGallery->sort = $secSort;
        $secGallery->sort = $firSort;
        return ($firGallery->save() && $secGallery->save());
    }

}
