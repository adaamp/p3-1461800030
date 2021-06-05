<head>
    <meta name="viewport" content="width=device-width,
initial-scale=1">
    <title>Data Apotik</title>
    <style>
    table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
    }

    thead {
        background-color: #3f48cc;
    }

    th, td {
        text-align: left;
    padding: 8px;
    }

    tr:nth-child(even){background-color: #c53fcc}
    .tambah{
        padding: 8px 16px ;
        text-decoration: none;
    }
    </style>
</head>

<body>
    <div style="overflow-x:auto;">
        <a class="tambah" href="{{route( 'apotik.create')}}">
    Tambah Data </a>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nbi</th>
                    <th>nama Obat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach ($ as $apk)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$apk->kode_obat}}</td>
                <td>{{$apk->nama_obat}}</td>
                <td>
                    <a href="{{ url ('apotik/' . $apk->id . "/edit") }}">Edit </a>
                    |
                    <form href="{{ url ('apotik/' .$apk->id .)}}"method="post">
                    @csrf
                    <input type="hidden" name="_method" value="delete">
                    <button type="sumbit">delete</button>
                </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>