$('.delete-book').click(function (e) {
    e.preventDefault();

    if (confirm('Realmente deseja excluir este registro do sistema ?')) {
        $(e.target).closest('form').submit();
    }
});