<div class="table-responsive">
    <table {{ $attributes->merge(['class' => 'table']) }}>
        <thead>
            {{ $header }}
        </thead>
        <tbody>
            {{ $body }}
        </tbody>
        <tfoot>
            {{ $footer }}
        </tfoot>
    </table>
</div>