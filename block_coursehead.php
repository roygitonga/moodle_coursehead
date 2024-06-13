<?php
class block_coursehead extends block_base {

    public function init() {
        $this->title = get_string('pluginname', 'block_coursehead');
    }

    public function get_content() {
        if ($this->content !== null) {
            return $this->content;
        }

        $this->content = new stdClass;
        $this->content->text = $this->generate_html();
        $this->content->footer = '';

        return $this->content;
    }

    private function generate_html() {
        global $CFG;

        $title = $this->config->title ?? 'Responsive Government: Strategies for Engaging and Serving Citizens';
        $teacher = $this->config->teacher ?? 'John Doe';
        $category = $this->config->category ?? 'Governance';
        $overview_items = $this->config->overview_items ?? [];
        $requirements = $this->config->requirements ?? [];

        ob_start();
        ?>
        <section class="course_head-container">
            <div class="course_head-inner">
                <div class="course_head-media-wrapper">
                    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/f6247a2173a574e61f8224138bfc46035ef04d5498a0b8385e96e02c3903bf15?apiKey=c3b33cd276a446d9926df156a0dba792&" class="course_head-image" alt="Responsive government visual" />
                    <div class="course_head-media-overlay">
                        <div class="course_head-control-wrapper">
                            <div class="course_head-play-button">
                                <div class="course_head-play-icon"></div>
                            </div>
                            <div class="course_head-media-controls">
                                <div class="course_head-controls-left">
                                    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/15fdec89116dfa58d4ad019516fc3262afcfcffbd9c2764d8e667b3189cbd1e5?apiKey=c3b33cd276a446d9926df156a0dba792&" class="course_head-icon" alt="Playback icon 1" />
                                    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/790cf00fa0cfad533eb6eb378816876511d776aeb26b42ad64d669f169011fb8?apiKey=c3b33cd276a446d9926df156a0dba792&" class="course_head-icon" alt="Playback icon 2" />
                                    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/a518097e3eb87b5f830377f9a61f324183ced49f695cb771c724a2cbc8b73646?apiKey=c3b33cd276a446d9926df156a0dba792&" class="course_head-icon" alt="Playback icon 3" />
                                    <div class="course_head-timestamp">03:32/30:00</div>
                                </div>
                                <div class="course_head-controls-right">
                                    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/6baddd4fe23467effe8f3f31d250529c5ddf0b453805e32793d41492ca0ee534?apiKey=c3b33cd276a446d9926df156a0dba792&" class="course_head-icon" alt="Settings icon" />
                                    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/c807c67957d2f06cb3b8e3404f716cd7f56ac796cfe1c4c0706aeeff72bae3ce?apiKey=c3b33cd276a446d9926df156a0dba792&" class="course_head-icon" alt="Fullscreen icon" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="course_head-content">
                    <header class="course_head-title-wrapper">
                        <h2 class="course_head-title"><?= $title ?></h2>
                        <p class="course_head-subtitle"><?= $teacher ?> • <?= $category ?></p>
                    </header>
                    <nav class="course_head-tabs">
                        <div class="course_head-tabs-inner">
                            <div class="course_head-tab">Overview</div>
                            <div class="course_head-tab-inactive">Requirements</div>
                        </div>
                    </nav>
                    <section class="course_head-tab-content">
                        <h3 class="course_head-outcome-title">Outcome</h3>
                        <div class="course_head-outcome-list">
                            <?php foreach ($overview_items as $item): ?>
                                <div class="course_head-outcome-item">
                                    <img loading="lazy" src="<?= $item['icon'] ?>" class="course_head-outcome-item-icon" alt="<?= $item['text'] ?>" />
                                    <div class="course_head-outcome-item-text"><?= $item['text'] ?></div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </section>
                </section>
                <section class="course_head-description-wrapper">
                    <h3 class="course_head-description-title">Course Requirements:</h3>
                    <p class="course_head-description-text">
                        <?php foreach ($requirements as $requirement): ?>
                            <?= $requirement ?><br />
                        <?php endforeach; ?>
                    </p>
                </section>
            </div>
        </section>
        <?php
        return ob_get_clean();
    }

    public function instance_config_save($data, $nolongerused = false) {
        parent::instance_config_save($data, $nolongerused);
    }

    public function instance_allow_multiple() {
        return true;
    }
}
