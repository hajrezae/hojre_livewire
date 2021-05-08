@props(['avatar_url' => null, 'image' => asset('/admin/media/users/default.jpg')])
<div class="image-input image-input-outline image-input-circle" id="{{ $attributes->get('id') }}">
    <div class="image-input-wrapper" style="background-image: url('{{$image}}');"></div>
    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="تغییر آواتار">
        <i class="fa fa-pen icon-sm text-muted"></i>
        <input type="file" {{ $attributes }}>
        <input type="hidden" name="profile_avatar_remove" value="0">
    </label>
    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="لغو آواتار">
        <i class="ki ki-bold-close icon-xs text-muted"></i>
    </span>
</div>
