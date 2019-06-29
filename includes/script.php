<script src="/js/jquery.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="https://kit.fontawesome.com/279033bd21.js"></script>
<script src="/js/clipboard.js"></script>
<script>
var clipboard = new ClipboardJS('.btn');
clipboard.on('success', function(e) {
    console.log(e);
});
clipboard.on('error', function(e) {
    console.log(e);
});
</script>
