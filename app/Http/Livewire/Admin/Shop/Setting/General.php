<?php

namespace App\Http\Livewire\Admin\Shop\Setting;

use App\Models\ShopOption;
use App\Services\Shop;
use Livewire\Component;

class General extends Component {
    public $shop_name;
    public $admin_url;

    public function saveSettings()
    {
        $this->validate();
        ShopOption::updateOrInsert(['option_name' => 'shop_name'], ['option_value' => $this->shop_name]);
        ShopOption::updateOrInsert(['option_name' => 'admin_url'], ['option_value' => $this->admin_url]);

        return redirect("{$this->admin_url}/shop/setting");
        session()->flash('action_success', 'sdalkh');
    }

    public function mount()
    {
        $this->shop_name = ShopOption::firstWhere('option_name', 'shop_name')->option_value;
        $this->admin_url = ShopOption::firstWhere('option_name', 'admin_url')->option_value;
    }

    public function render()
    {
        return view('livewire.admin.shop.setting.general');
    }

    public function rules()
    {
        return [
            'shop_name' => ['nullable'],
            'admin_url' => ['nullable', 'alpha']
        ];
    }
}
