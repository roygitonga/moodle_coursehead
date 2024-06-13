<?php
class block_coursehead_edit_form extends block_edit_form {

    protected function specific_definition($mform) {
        // Title.
        $mform->addElement('text', 'config_title', get_string('title', 'block_coursehead'));
        $mform->setType('config_title', PARAM_TEXT);

        // Teacher.
        $mform->addElement('text', 'config_teacher', get_string('teacher', 'block_coursehead'));
        $mform->setType('config_teacher', PARAM_TEXT);

        // Category.
        $mform->addElement('text', 'config_category', get_string('category', 'block_coursehead'));
        $mform->setType('config_category', PARAM_TEXT);

        // Overview items.
        $mform->addElement('textarea', 'config_overview_items', get_string('overview_items', 'block_coursehead'), 'wrap="virtual" rows="10" cols="50"');
        $mform->setType('config_overview_items', PARAM_TEXT);

        // Requirements.
        $mform->addElement('textarea', 'config_requirements', get_string('requirements', 'block_coursehead'), 'wrap="virtual" rows="10" cols="50"');
        $mform->setType('config_requirements', PARAM_TEXT);
    }
}
