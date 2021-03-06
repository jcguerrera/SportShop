<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Sale;
use App\Product;

class Item extends Model
{
    // attributes id, quantity, total, product_id, sale_id
    protected $fillable = ['quantity','total'];

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getQuantity()
    {
        return $this->attributes['quantity'];
    }

    public function setQuantity($quantity)
    {
        $this->attributes['quantity'] = $quantity;
    }

    public function getTotal()
    {
        return $this->attributes['total'];
    }

    public function setTotal($total)
    {
        return $this->attributes['total'] = $total;
    }

    public function getProductId()
    {
        return $this->attributes['product_id'];
    }

    public function setProductId($product_id)
    {
        $this->attributes['product_id'] = $product_id;
    }

    public function getSaleId()
    {
        return $this->attributes['sale_id'];
    }

    public function setSaleId($sale_id)
    {
        $this->attributes['sale_id'] = $sale_id;
    }

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function sale(){
        return $this->belongsTo(Sale::class);
    }
}
