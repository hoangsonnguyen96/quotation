<div class="{{ $class ? $class : 'col-lg-3 col-6' }}">
    <div class="border-dashboard small-box border-left-1 border-{{ $background ?? '' }}">
        <div class="inner">
            <h3>{{ $number ?? 0 }}</h3>
            <p>{{ $title ?? '' }}</p>
        </div>
    </div>
</div>
