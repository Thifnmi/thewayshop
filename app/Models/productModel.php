<?php

namespace App\Models;

use CodeIgniter\Model;

class productModel extends Model
{
    protected $table      = 'products';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $allowedFields = ['id', 'product_code', 'image', 'product_name', 'price', 'category_id', 'supplier_id', 'quantity', 'collection', 'main_stone_type', 'main_stone_color', 'stone_shape', 'sub_stone_type', 'secondary_stone_color', 'gender', 'gift_giving_occasions', 'gift_for', 'weight_of_gold', 'gold_age', 'style', 'wire_size', 'face_size', 'machine_thickness', 'brand_origin', 'origin_of_the_apparatus', 'assembled_at', 'watch_movement_type', 'glass_type', 'wire_material', 'shell_material', 'face_shape', 'water_resistance', 'needle_number', 'watch_stones_attached', 'chronometer_certification', 'main_function', 'created_on', 'created_by', 'total_view'];

    public function getProductById(int $id)
    {
        return $this->find($id);
    }
    public function getProductsById(int $id)
    {
        return $this->where('id',$id)->findAll();
    }

    public function getProductByCategory(int $cid, int $offset, int $recors_per_page)
    {
        return $this->where('category_id', $cid)->orderby('created_on', 'desc')->findAll($recors_per_page, $offset);
    }
    public function getCountProduct(int $cid)
    {
        return $this->where('category_id', $cid)->countAllResults();
    }
    public function getAllProduct()
    {
        return $this->orderby('created_on', 'desc')->findAll();
    }
    public function getProductRelease(int $cid)
    {
        return $this->where('category_id', $cid)->orderby('created_on', 'desc')->findAll(6,0);
    }
    public function getShowProduct(int $cid)
    {
        return $this->where('category_id', $cid)->findAll();
    }
    public function getMaxId()
    {
        return $this->selectMax('id')->find();
    }

    public function getProductByKey(string $key, int $offset, int $recors_per_page)
    {
        return $this->like('product_name', $key)->findAll($recors_per_page, $offset);
    }
    public function countProductGetByKey(string $key)
    {
        return $this->like('product_name', $key)->findAll();
    }

    public function getProductbyMaterial(string $key, int $offset, int $recors_per_page)
    {
        return $this->like('product_name', $key)->where('category_id !=',4)->findAll($recors_per_page, $offset);
    }
    public function countProductGetByMaterial(string $key)
    {
        return $this->like('product_name', $key)->where('category_id !=',4)->findAll();
    }

    public function getProductbyCollection(string $key, int $offset, int $recors_per_page)
    {
        return $this->like('collection', $key)->where('category_id !=',4)->findAll($recors_per_page, $offset);
    }
    public function countProductGetByCollection(string $key)
    {
        return $this->like('product_name', $key)->where('category_id !=',4)->findAll();
    }

    public function getProductbyBrands(string $key, int $offset, int $recors_per_page)
    {
        return $this->like('supplier_id', $key)->where('category_id !=',4)->findAll($recors_per_page, $offset);
    }
    public function countProductGetByBrands(string $key)
    {
        return $this->like('supplier_id', $key)->where('category_id !=',4)->findAll();
    }
    
    public function getProductbyGender(string $key, int $offset, int $recors_per_page)
    {
        return $this->like('gender', $key)->where('category_id',4)->findAll($recors_per_page, $offset);
    }
    public function countProductGetByGender(string $key)
    {
        return $this->like('gender', $key)->where('category_id',4)->findAll();
    }

    public function getProductbyWireMaterial(string $key, int $offset, int $recors_per_page)
    {
        return $this->like('wire_material', $key)->where('category_id',4)->findAll($recors_per_page, $offset);
    }
    public function countProductGetByWireMaterial(string $key)
    {
        return $this->like('wire_material', $key)->where('category_id',4)->findAll();
    }

    public function getProductbyStyle(string $key, int $offset, int $recors_per_page)
    {
        return $this->like('style', $key)->where('category_id',4)->findAll($recors_per_page, $offset);
    }
    public function countProductGetByStyle(string $key)
    {
        return $this->like('style', $key)->where('category_id',4)->findAll();
    }

    public function getProductbyBrandsForWatch(string $key, int $offset, int $recors_per_page)
    {
        return $this->like('supplier_id', $key)->where('category_id',4)->findAll($recors_per_page, $offset);
    }
    public function countProductGetByBrandsForWatch(string $key)
    {
        return $this->like('supplier_id', $key)->where('category_id',4)->findAll();
    }
}
