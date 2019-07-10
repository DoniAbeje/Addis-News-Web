<!-- Row -->
<div class="row bg-primary shadow-sm">
    <!-- Category Tabs -->
    <ul class="nav nav-tabs border-bottom-0">
        <li class="nav-item">
            <a class={!!$slot == 'Recent' ? '"nav-link nav-link-white active"' : '"nav-link nav-link-white"'!!} data-toggle="tab" href="/news">Recent</a>
        </li>
        <li class="nav-item">
            <a class={!!$slot == 'Entertainment' ? '"nav-link nav-link-white active"' : '"nav-link nav-link-white"'!!} data-toggle="tab" href="/news/Entertainment">Entertainment</a>
        </li>
        <li class="nav-item">
            <a class={!!$slot == 'Politics' ? '"nav-link nav-link-white active"' : '"nav-link nav-link-white"'!!} data-toggle="tab" href="/news/Politics">Politics</a>
        </li>
        <li class="nav-item">
            <a class={!!$slot == 'Sport' ? '"nav-link nav-link-white active"' : '"nav-link nav-link-white"'!!} data-toggle="tab" href="/news/Sport">Sport</a>
        </li>
        <li class="nav-item">
            <a class={!!$slot == 'Business' ? '"nav-link nav-link-white active"' : '"nav-link nav-link-white"'!!} href="/news/Business">Business</a>
        </li>

    </ul>
</div>
<!-- / Row -->