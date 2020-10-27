<td><input disabled class="form-control form-control-plaintext"  name="name" id="name-{{ $product->id }}" type="text" value="{{ $product->name }}"></td>
<td><input disabled class="form-control form-control-plaintext" name="image" id="image-{{ $product->id }}" type="text" value="{{ $product->image }}"></td>
<td><input disabled class="form-control form-control-plaintext" name="quanty" id="quanty-{{ $product->id }}" type="text" value="{{ $product->quanty }}"></td>
<td><input disabled class="form-control form-control-plaintext" name="p-price" id="p-price-{{ $product->id }}"
           type="text" value="{{ $product->purchase_price }}"></td>
<td><input disabled class="form-control form-control-plaintext" name="s-price" id="s-price-{{ $product->id }}"
           type="text" value="{{ $product->price }}"></td>
<td><select disabled name="status" id="status-{{ $product->id }}" class="form-control form-control-plaintext">

        @if ($product->status == 1)
            <option value="1" selected >Hot</option>
            <option value="2">New</option>
            <option value="0">Normal</option>
        @elseif($product->status == 2)
            <option value="1">Hot</option>
            <option value="2" selected >New</option>
            <option value="0">Normal</option>
        @else
            <option value="1">Hot</option>
            <option value="2">New</option>
            <option value="0" selected >Normal</option>
        @endif
    </select></td>
<td><select disabled name="idCategory" id="idCategory-{{ $product->id }}" class="form-control form-control-plaintext">
        @foreach ($category as $cat)
            @if ($cat->id == $product->idCategory)
                <option value="{{ $cat->id }}" selected >{{ $cat->name }}</option>
            @else
                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
            @endif
        @endforeach
    </select></td>
@can('update', 'App\Product')
    <td><a href="javacript:" onclick="EditItem({{ $product->id }})" id="btnEdit-{{ $product->id }}"><span
                class="ion ion-md-build mr-4"></span></a>
        <a href="javacript:" hidden onclick="SaveEditItem({{ $product->id }})" id="btnSave-{{ $product->id }}"><span
                class="ion ion-md-save mr-4"></span></a>
        <a href="javacript:" hidden onclick="CancelEditItem({{ $product->id }})" id="btnCancel-{{ $product->id }}"><span
                class="ion ion-md-close"></span></a>
        @endcan
        @can('delete', 'App\Product')
            <a href="admin/user/delete/{{ $product->id }}" id="btnDelete-{{ $product->id }}"><span
                    class="ion ion-md-trash"></span></a></td>
@endcan

