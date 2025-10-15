document.querySelector('form').addEventListener('submit', function (e) {
    document.querySelector('#tr_content').value = quill1.root.innerHTML; // 1. editor için
    document.querySelector('#en_content').value = quill2.root.innerHTML; // 2. editor için
    document.querySelector('#fn_content').value = quill3.root.innerHTML; // 3. editor için
});

var quill1 = new Quill("#snow-editor-1", {
    bounds: "#snow-editor-1",
    modules: {
        formula: true,
        toolbar: "#snow-toolbar-1"
    },
    theme: "snow"
});

var quill2 = new Quill("#snow-editor-2", {
    bounds: "#snow-editor-2",
    modules: {
        formula: true,
        toolbar: "#snow-toolbar-2"
    },
    theme: "snow"
});

var quill3 = new Quill("#snow-editor-3", {
    bounds: "#snow-editor-3",
    modules: {
        formula: true,
        toolbar: "#snow-toolbar-3"
    },
    theme: "snow"
});
