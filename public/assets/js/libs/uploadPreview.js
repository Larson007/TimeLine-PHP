const uploadPreview = () => {
    document.addEventListener('DOMContentLoaded', () => {
        thumbnail.onchange = evt => {
            const [file] = thumbnail.files;
            if (file) {
                preview.src = URL.createObjectURL(file);
            }
        };
    });
};

export default uploadPreview;