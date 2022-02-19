<footer class="container py-5">
  <div class="row">
    <div class="col-12 col-md">

    <small class="d-block mb-3 text-muted">&copy; 2022</small>
  </div>

</div>
</footer>


@push('js')
<script>
  (function(w, d, $) {
    $('.create_edit').click(function(e) {
      e.preventDefault();
      let my = $(this);
      var url = my.attr('href');
      $.get(url).done( function (r) {
        $('.modal-body').html(r);
        $('.mi-modal').modal('show');
      });
    });

    $('.create_edit_puesto').click(function(e) {
      e.preventDefault();
      let my = $(this);
      var url = my.attr('href');
      $.get(url).done( function (r) {
        $('.modal-body').html(r);
        $('.mi-modal').modal('show');
      });
    });

    $('.create_edit_cargo').click(function(e) {
      e.preventDefault();
      let my = $(this);
      var url = my.attr('href');
      $.get(url).done( function (r) {
        $('.modal-body').html(r);
        $('.mi-modal').modal('show');
      });
    });

    $(d).on('submit', '.form_create_edit', function(e) {
      e.preventDefault();
      let my = $(this);
      var url = my.attr('action'), method = my.attr('method');
      $.ajax({
        url: url,
        method: method,
        data: my.serialize(),
        success: (r) => {
          setTimeout(function() {
            location.reload();
          }, 2000);
          $('.mi-modal').modal('hide');
          toastr.info('Nueva empresa agregada', 'Todo se aplico correctamente');
        }, error: (xhr) => {
          var errs = xhr.responseJSON;
          if ( $.isEmptyObject(errs) == false ) {
            $.each( errs, function(k,v) {
              $('#' + k)
              .addClass('is-invalid')
              .after('<span class="invalid-feedback"><strong>' + v + '</strong></span>');
            });
          }
        }
      });
    });
    
    $(d).on('submit', '.form_create_edit_puesto', function(e) {
      e.preventDefault();
      let my = $(this);
      var url = my.attr('action'), method = my.attr('method');
      $.ajax({
        url: url,
        method: method,
        data: my.serialize(),
        success: (r) => {
          setTimeout(function() {
            location.reload();
          }, 2000);
          $('.mi-modal').modal('hide');
          toastr.info('Nuevo puesto agregado', 'Todo se aplico correctamente');
        }, error: (xhr) => {
          var errs = xhr.responseJSON;
          if ( $.isEmptyObject(errs) == false ) {
            $.each( errs, function(k,v) {
              $('#' + k)
              .addClass('is-invalid')
              .after('<span class="invalid-feedback"><strong>' + v + '</strong></span>');
            });
          }
        }
      });
    });

    $(d).on('submit', '.form_create_edit_cargo', function(e) {
      e.preventDefault();
      let my = $(this);
      var url = my.attr('action'), method = my.attr('method');
      $.ajax({
        url: url,
        method: method,
        data: my.serialize(),
        success: (r) => {
          setTimeout(function() {
            window.location.href = "{{ route('cargo.index')}}";
          }, 2000);
          $('.mi-modal').modal('hide');
          toastr.info('Nuevo cargo agregado', 'Todo se aplico correctamente');
        }, error: (xhr) => {
          var errs = xhr.responseJSON;
          if ( $.isEmptyObject(errs) == false ) {
            $.each( errs, function(k,v) {
              $('#' + k)
              .addClass('is-invalid')
              .after('<span class="invalid-feedback"><strong>' + v + '</strong></span>');
            });
          }
        }
      });
    });


  })(window, document, window.jQuery);
</script>
@endpush
