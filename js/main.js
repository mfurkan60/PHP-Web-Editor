let editor = document.getElementById('editor');
let btn = document.getElementById('btn');





const openFile = async () => {

    [fileHandler] = await window.showOpenFilePicker();
    let file = await fileHandler.getFile();
    let content = await file.text();
    editor.value = content;
    //console.log(editor.value);




}


//Save File on the desktop using by Simple Editor

const saveFile = async () => {
    console.log('1. basamak kayıtEdildi');
    let writable = await fileHandler.createWritable();

    await writable.write(editor.value);

    //Close Method
    await writable.close();

    saveNotificationMessage();


}


const kaydet = () => {
    console.log("Buraya geldi");
    saveFile();
}




window.addEventListener('keydown', e => {
    if (e.key === 's' && e.metaKey) {
        e.preventDefault();
        saveFile();
    } else if (e.key === 'o' && e.metaKey) {
        e.preventDefault();
        openFolder();
    }
});




const saveNotificationMessage = () => {
    swal("file save successful ");

}

const refreshPage = () => {
    window.location.reload();
}


const visiableTextarea = () => {

}





