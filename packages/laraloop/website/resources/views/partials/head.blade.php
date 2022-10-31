@push('head')
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.4.0/styles/github-dark-dimmed.min.css">
    <style>
        .hljs {
            background: rgb(33, 37, 41);
        }
    </style>
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.4.0/highlight.min.js"></script>
    <script>
        document.addEventListener('turbo:load', function() {
            // Array.from(document.querySelectorAll('pre code')).forEach(function(code) {
            //     if (code.classList.contains('skip-escape')) return;
            //     const escapedCode = document.createElement('code');
            //     escapedCode.innerHTML = code.innerHTML.replaceAll('&', '&amp;').replaceAll('<', '&lt;').replaceAll('>', '&gt;').replaceAll('"', '&quot;').replaceAll("'", '&#039;');
            //     code.replaceWith(escapedCode);
            // });
            hljs.highlightAll();
        });
    </script>
@endpush
