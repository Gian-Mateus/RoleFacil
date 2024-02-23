@props(['item1', 'item2', 'id1', 'id2'])
<div>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item " role="presentation">
            <button class="nav-link active" id="{{ $id1 }}-tab" data-bs-toggle="tab" data-bs-target="#{{ $id1 }}-tab-pane" type="button" role="tab" aria-controls="{{ $id1 }}-tab-pane" aria-selected="true">{{ $item1 }}</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="{{ $id2 }}-tab" data-bs-toggle="tab" data-bs-target="#{{ $id2 }}-tab-pane" type="button" role="tab" aria-controls="{{ $id2 }}-tab-pane" aria-selected="false">{{ $item2 }}</button>
        </li>
    </ul>
</div>
