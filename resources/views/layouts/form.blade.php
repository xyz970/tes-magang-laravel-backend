@extends('layouts.base', ['title' => $title])

@section('content')
    @yield('form')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            tinymce.init({
                selector: '#editor',
                height: 500,
                plugins: [
                    'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
                    'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
                    'insertdatetime', 'media', 'table', 'help', 'wordcount', 'save'
                ],
                toolbar: 'undo redo | blocks | ' +
                    'bold italic backcolor | alignleft aligncenter ' +
                    'alignright alignjustify | bullist numlist outdent indent | ' +
                    'removeformat | help' +
                    'save',
                // plugin_preview_height : "1056",
                plugin_preview_width: "50%",
                content_css: ''
            });
        });

        /*
         * FilePond Initialization
         */
        const inputElement = document.querySelector('input[type="file"]');
        // FilePond.registerPlugin(
        //     FilePondPluginImageExifOrientation,
        //     FilePondPluginImagePreview,
        // );
        // const edit = document.getElementsByName
        FilePond.registerPlugin(
            FilePondPluginImageExifOrientation,
            FilePondPluginImagePreview,
            FilePondPluginFileValidateType,
        );
        let pond = FilePond.create(
            inputElement, {
                acceptedFileTypes: ['image/jpeg', 'image/png', 'image/jpg'],
                labelFileProcessingComplete: `Upload Berhasil`,
                labelTapToUndo: `ketuk untuk membatalkan`,
                labelTapToCancel: `ketuk untuk membatalkan`,
                labelFileProcessingError: `Gagal Memproses`,
                labelTapToRetry: `ketuk untuk coba lagi`,
                labelFileProcessing: `Sedang memproses`,
                labelIdle: `Seret dan tempel atau <span class="filepond--label-action">Pilih dokumen</span>`,
                labelInvalidField: 'File tidak didukung',
                labelFileTypeNotAllowed: 'File Gambar tidak valid',
                fileValidateTypeLabelExpectedTypes: 'File harus berekstensi .jpeg/.jpg atau .png',
                credits: false,
            });
        var value = document.getElementsByClassName('filepond--data');

        const file = pond.files;
        pond.setOptions({
            server: {
                process: "{{ route('image_temp_store') }}",
                revert: {
                    url: "{{ route('image_temp_delete') }}/",
                    method: 'GET',
                },
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                }
            }
        });
    </script>
    @yield('update')
@endsection
