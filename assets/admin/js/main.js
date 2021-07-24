QTags.addButton('qtsd-button-one', 'U', '<u>', '</u>');
QTags.addButton('qtsd-button-two', 'JS', qtsd_button_two);
QTags.addButton('qtsd-button-three', 'FAP', qtsd_fap_preview);

function qtsd_button_two() {
    var name = prompt('What is your name');
    var text = "Hello " + name;
    QTags.insertContent(text);
}

function qtsd_fap_preview() {
    tb_show('Fontawesome', qtd.preview);
}

function insertFA(icon) {
    tb_remove();
    QTags.insertContent("<i class='fa " + icon + "'></i>");
}