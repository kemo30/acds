<x-back-layout titel="Home">
   
    <form role="form" action="{{url('/dashboard/test')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">

            <div class="row">
                <div class="col-sm-12">
                    <!-- text input -->
                    <x-text-input label='Arabic Name' name='name_ar' type='text' placeholder='Arabic Name'/>
                </div>

                <div class="col-sm-12">
                    <x-text-area label='Arabic Discription' name='discription_ar' placeholder='Arabic Discription'/>
                </div>
            </div>
            <x-multiple-field label='lebel' name='kemo'></x-multiple-field>
            <x-editor label='txet editor' name='heeey'></x-editor>
            <input  type="submit">

        </div>
        



      
    </form>

    <x-slot name='script'>
    <script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>
<x-alert ></x-alert>
<script src="{{asset('assets/back/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<script src="{{asset('assets/back/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script src="{{asset('assets/back/dist/js/demo.js')}}"></script>
    </x-slot>


</x-back-layout>