document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.photo').forEach((elem) => {
        elem.addEventListener('click', (e) => {
            const imageUrl = e.target.src;
            if (imageUrl) {
                document.getElementById('modalImage').src = imageUrl;
            }else{
                console.error("Image Url not found");
            }
        });
    });
})



document.getElementById('imageModal').addEventListener('hidden.bs.modal', () => {
    if (window.getSelection) {
        window.getSelection().removeAllRanges();
    } else if (document.selection) {
        document.selection.empty();
    }
})
