<li class="nav-item">
    <a href="javascript:void(0);" @el(nav-link)>
        <i class="fas fa-sync"></i>
    </a>
</li>
<script>
    @el.off('click').on('click', function() {
        $.admin.reload();
        $.admin.toastr.success('{{ admin_trans('admin.refresh_succeeded') }}', '', {positionClass:"toast-top-center"});
    });
</script>
