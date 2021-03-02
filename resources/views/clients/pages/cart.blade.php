@extends('clients.pages.Master')
@section('content')
    <div class="main">
        @include('clients.pages.cart-content')
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script>
        $(function() {
            $(document).on("click", '.qtybutton', function() {
                var $button = $(this);
                var oldValue = $button.parent().find("input").val();
                if ($button.text() === "+") {
                    var newVal = parseFloat(oldValue) + 1;
                } else {
                    // Don't allow decrementing below zero
                    if (oldValue > 0) {
                        var newVal = parseFloat(oldValue) - 1;
                    } else {
                        newVal = 1;
                    }
                }
                $button.parent().find("input").val(newVal);
            });

            $(document).on('click', '.inc', function() {
                var qty = $(this).data('qty');
                var quantity = $(this).parents('tr').find('input').val();
                if (quantity > qty) {
                    // console.log('123');
                    $(this).parents('tr').find('input').val($(this).data('qty'));
                }
            });

            $(document).on('change', '.cart-plus-minus-box', function() {
                var quantity = $(this).val();
                var qty = $(this).parents('tr').find('.inc').data('qty');
                if (quantity > qty) {
                    // console.log('123');
                    quantity = $(this).val($(this).parents('tr').find('.inc').data('qty'));
                } else if (quantity < 0) {
                    quantity = $(this).val(1);
                }
            });
            function updateCart(event) {
                event.preventDefault();
                $button = $('.qtybutton');
                url = $('.update-cart-url').data('url');
                let quantity = $(this).parents('tr').find('input').val();
                // alert(quantity);

                id = $(this).data('id');
                $.ajax({
                    type: "GET",
                    url: url,
                    data: {
                        quantity: quantity,
                        id: id
                    },
                    success: function(data) {
                        if (data.code === 200) {
                            // console.log(data.content);
                            $('.main').html(data.content);
                            alert('Update Success');
                        }
                    }
                });
            }

            function deleteCart(event) {
                event.preventDefault();
                let url = $('.table-content').data('url');
                let id = $(this).data('id');
                alert(id);
                $.ajax({
                    type: "GET",
                    url: url,
                    data: {
                        id: id
                    },
                    success: function(data) {
                        if (data.code === 200) {
                            // console.log(data.content);
                            $('.main').html(data.content);
                            alert('Remove Success');
                        }
                    }
                });
            }

            function deleteAll(event) {
                event.preventDefault();
                let url = $('.cart-main-area').data('url');
                $.ajax({
                    type: "GET",
                    url: url,
                    success: function(data) {
                        if (data.code === 200) {
                            // console.log(data.content);
                            $('.main').html(data.content);
                            alert('Destroy Success');
                        }
                    }
                });
            }
            $(document).on('click', '.update', updateCart);
            $(document).on('click', '.delete', deleteCart);
            $(document).on('click', '.deleteAll', deleteAll);
        });
    </script>
@stop
