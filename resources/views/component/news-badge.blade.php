@switch($category->name)
    @case('Entertainment')
    <span class="badge badge-info"> Entertainment</span>
    @break

    @case('Politics')
    <span class="badge badge-primary"> Politics</span>

    @case('Sport')
    <span class="badge badge-warning"> Sport</span>

    @break

    @case('Business')
    <span class="badge badge-danger"> Business</span>

@endswitch