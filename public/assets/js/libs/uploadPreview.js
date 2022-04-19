const uploadPreview = () => {
    document.addEventListener('DOMContentLoaded', () => {
        thumbnail_file.onchange = evt => {
            const [file] = thumbnail_file.files;
            if (file) {
                preview.src = URL.createObjectURL(file);
            }
        };
    });
};

export default uploadPreview;