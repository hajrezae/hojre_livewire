<?php

namespace App\Http\Livewire\Admin\Product\Product\Components;

use Livewire\Component;
use Livewire\WithFileUploads;

class ProductImageGallery extends Component {
	use WithFileUploads;

	public $product;
	public $gallery_images;

	public function updatedGalleryImages() {
		$urls = [];
		foreach ($this->gallery_images as $image) {
			$url = $image->store('public/products');
			array_push($urls, $url);
		}

		$this->product->image_gallery = serialize($urls);
		$this->product->save();
	}

	public function deleteImage($image) {

		$i = array_search($image, unserialize($this->product->image_gallery));
		$images = unserialize($this->product->image_gallery);

		unset($images[$i]);
		$this->product->image_gallery = serialize($images);
		if (empty($images)) $this->product->image_gallery = null;
		$this->product->save();
		$this->emit('$refresh');
	}

	public function deleteTempImage($index) {
		unset($this->gallery_images[$index]);

		$images = unserialize($this->product->image_gallery);

		unset($images[$index]);
		$this->product->image_gallery = serialize($images);
		if (empty($images)) $this->product->image_gallery = null;
		$this->product->save();
		$this->emit('$refresh');
	}

	public function render() {
		return view('livewire.admin.product.product.components.product-image-gallery');
	}
}
