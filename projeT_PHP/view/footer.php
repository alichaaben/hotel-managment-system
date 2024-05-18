</section>

<!-- CONTENT -->




<script src="./assets/JS/script.js"></script>
<script src="./assets/JS/dropdown.js"></script>
<script src="./assets/JS/photoProfile.js"></script>
<script src="./assets/JS/multiImage.js"></script>
<script src="./assets/JS/Tabls.js"></script>
<script src="https://use.fontawesome.com/fe459689b4.js"></script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="./assets/JS/script.js"></script>

<script>

    $('.delete_btn_ajax').on('click',function(e){
        e.preventDefault();
        const href=$(this).attr('href')
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if(result.value){
                document.location.href=href;
            }
        })

    })

</script>