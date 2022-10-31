@props([
    'key'
])
<script async src="https://www.googletagmanager.com/gtag/js?id={{ $key }}"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', '{{ $key }}');

    document.addEventListener('turbo:load', function() {
        gtag('set', 'page_path', location.pathname);
        gtag('set', 'page_title', document.title);
        gtag('set', 'page_location', location.href);
        gtag('event', 'page_view');
    });
</script>
