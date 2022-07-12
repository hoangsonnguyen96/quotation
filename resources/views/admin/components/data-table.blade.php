<div>
    <table class="table">
        <thead>
            <tr>
                @foreach ($header as $item)
                    <th>{{ $item }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row"></td>
                <td>1</td>
                <td>2</td>
            </tr>
        </tbody>
    </table>
</div>