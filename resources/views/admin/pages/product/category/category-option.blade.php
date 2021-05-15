@foreach($categories as $category)
    @if($category->childs()->isNotEmpty())
        <option
                {{ !is_null($selectedCategory) && $category->id == $selectedCategory->id ? 'disabled' : null}} value="{{ $category->id }}"
                @if( isset($selectedCategory) && $selectedCategory->parent_id == $category->id) selected @endif>{{ str_repeat("- ", $loop->depth) }}{{ $category->label }}</option>
        @include('admin.pages.product.category.category-option', ['selectedCategory' => $selectedCategory, 'categories' => $category->childs()])
    @else
        <option
                {{ !is_null($selectedCategory) && $category->id == $selectedCategory->id ? 'disabled' : null}} value="{{ $category->id }}"
                @if( isset($selectedCategory) && $selectedCategory->parent_id == $category->id) selected @endif>{{ str_repeat("- ", $loop->depth) }}{{ $category->label }}</option>
    @endif
@endforeach