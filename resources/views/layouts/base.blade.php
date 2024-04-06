<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('third-party/gridjs/dist/theme/mermaid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('third-party/filepond/dist/filepond.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('third-party/filepond/dist/filepond-plugin-image-preview.min.css') }}"
        type="text/css">
    <link rel="stylesheet" href="{{ asset('third-party/sweetalert2/dist/sweetalert2.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('third-party/tinymce/skins/ui/oxide/content.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.0.0/css/flag-icons.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{ asset('third-party/sweetalert2/dist/sweetalert2.all.min.js     ') }}"></script>
    <script src="{{ asset('third-party/filepond/dist/filepond-plugin-image-exif-orientation.min.js         ') }}"></script>
    <script src="{{ asset('third-party/filepond/dist/filepond-plugin-image-preview.min.js         ') }}"></script>

    <script src="{{ asset('third-party/filepond/dist/filepond-plugin-file-validate-type.js        ') }}"></script>

    <script src="{{ asset('third-party/filepond/dist/filepond.min.js                              ') }}"></script>

    <script src="{{ asset('third-party/gridjs/dist/gridjs.umd.js') }}"></script>
    <script src="{{ asset('third-party/tinymce/tinymce.min.js') }}"></script>

    <title>Bookstore - {{ $title }}</title>
</head>

<body>
    @yield('content')

</body>

@if (Session::has('insertSuccess'))
    <script>
        Swal.fire({
            title: 'Berhasil',
            text: "Data berhasil ditambahkan",
            type: 'success',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Ya'
        })
    </script>
@endif
@if (Session::has('updateSuccess'))
    <script>
        Swal.fire({
            title: 'Berhasil',
            text: "Data berhasil diubah",
            type: 'success',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Ya'
        })
    </script>
@endif
@if (Session::has('deleteMessage'))
    <script>
        Swal.fire({
            title: 'Berhasil',
            text: "Data berhasil dihapus",
            type: 'success',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Ya'
        })
    </script>
@endif
<script>
    function edit(id) {
        Swal.fire({
            title: 'Edit?',
            text: "Apakah anda yakin ingin mengubah data ini?",
            type: 'info',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Batal',
            confirmButtonText: 'Ya'
        }).then((result) => {
            if (result.value) {
                // console.log(`${id}`);
                window.location.href = 'edit/' + id;
                // console.log(id);
            }
        })
    }

    function hapus(id) {
        Swal.fire({
            title: 'Hapus?',
            text: "Apakah anda yakin ingin menghapus data ini?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Batal',
            confirmButtonText: 'Ya'
        }).then((result) => {
            if (result.value) {
                // console.log(`${id}`);
                window.location.href = 'delete/' + id;
                // console.log(id);
            }
        })
    }

    let table = document.getElementById('table');
    count = 1;
    if (table) {
        /*
         * GridJs Initialization
         */
        new gridjs.Grid({
            columns: [{
                    name: "ID",
                    sort: 0,
                },
                {
                    name: "id",
                    hidden: true,
                },
                {
                    name: 'Cover',
                    sort: 0,
                    width: '20%',
                    formatter: (img) => gridjs.html(
                        `<center><img src='{{ asset('storage/img') }}/${img}'"/></center>`
                    )
                },
                "Judul", "Pengarang", "Publisher",
                {
                    name: "Bahasa",
                    sort: 0,
                    formatter: (_, row, ) => gridjs.html(
                        `<span class="fi fi-${row.cells[6].data}" style="height: 20px"></span>`
                    )
                }, , "Tahun Rilis",
                {
                    name: "Deskripsi",
                    sort: 0,
                    width: '70%',
                    formatter: (_, row, ) => gridjs.html(
                        `{!! '${row.cells[8].data}' !!}`
                    )
                }, {
                    name: "Status",
                    sort: 0,
                    width: '30%',
                    formatter: (_, row, ) => gridjs.html(
                        row.cells[9].data == 'not_publish' ?
                        `<span class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:text-red-400 border border-red-400">Not Published</span>` :
                        `<span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:text-green-400 border border-green-400">Published</span>`

                    )
                },
                {
                    name: 'Actions',
                    sort: 0,
                    width: '40%',
                    formatter: (_, row, ) => gridjs.html(
                        `<div class="inline-flex">
  <button class="text-white bg-blue-700 hover:bg-blue-600 font-bold py-2 px-4 rounded-l" onclick="edit('${row.cells[1].data}')">
    Edit
  </button>
  <button class="text-white bg-red-700 hover:bg-red-600 font-bold py-2 px-4 rounded-r" onclick="hapus('${row.cells[1].data}')">
    Hapus
  </button>
</div>`),

                }
            ],
            className: {
                // td: 'px-6 pb-12 whitespace-nowrap',
                td: 'px-6',
                container: 'shadow overflow-hidden border-b border-gray-200 sm:rounded-lg',
                table: 'min-w-full ',
                // table:'w-full flex flex-row flex-no-wrap sm:bg-white rounded-lg overflow-hidden sm:shadow-lg my-5'
                tbody: 'bg-white ',
                thead: 'bg-gray-50',
                paginationButtonCurrent: 'z-10 bg-indigo-50 border-indigo-500 text-indigo-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium',
                paginationButton: 'relative inline-flex items-center px-5 py-5 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50'
            },
            language: {
                'pagination': {
                    showing: 'Menampilkan',
                    results: () => 'data',
                    to: 'sampai',
                    of: 'dari',
                    previous: 'Sebelumnya',
                    next: 'Selanjutnya',
                },
                search: {
                    placeholder: '🔍 Cari...'
                },
                noRecordsFound: 'Data Kosong..'
            },
            resizable: true,
            sort: true,
            pagination: {

                enabled: true,
                limit: 10,

            },
            server: {
                url: "{{ route('book_data') }}",
                then: data => data.data.map(book => [
                    count++, book.id, book.cover, book.title, book.author, book.publisher, book.country,
                    book
                    .publish_date, book.desc, book.status
                ]),
                total: data => data.count,
            },
            search: {
                server: {
                    url: (_, keyword) => `search/${keyword}`
                }
            },
        }).render(document.getElementById("table"));
    }
</script>

</html>
