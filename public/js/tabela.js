// '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
$(window).on("load resize ", function() {
    var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
    $('.tbl-header').css({'padding-right':scrollWidth});
   
  }).resize();

  $(document).ready(function() {
    $(".buttonRemover#remover").click(function (e) {
      var my_id_value = $(this).data('id');
      $("#hiddenValue").val(my_id_value);
      $("#remocao").prop('href','/excluirusuario/'+my_id_value);
      console.log(my_id_value, "Hello, world!");
  })

    // $('#modalPush').on('show.bs.modal', function(event) {
    //   var bookId = $(e.relatedTarget).data('data-book-id');
    //   jQuery('.modal-body').append(input);
    //   $(e.currentTarget).find('input[name="bookId"]').val(bookId);
    // });
});
  
