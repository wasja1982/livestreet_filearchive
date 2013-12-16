<?php
/**
 * File Archive - тип топика "файл"
 *
 * Версия:	1.0.0
 * Автор:	Александр Вереник
 * Профиль:	http://livestreet.ru/profile/Wasja/
 * GitHub:	https://github.com/wasja1982/livestreet_filearchive
 *
 **/

class PluginFilearchive_HookFilearchive extends Hook {
    public function RegisterHook() {
        $this->AddHook('template_menu_create_topic_item', 'InjectAddLink');
    }

    public function InjectAddLink() {
        $sTemplatePath = Plugin::GetTemplatePath(__CLASS__) . 'inject_add_link.tpl';
        if ($this->Viewer_TemplateExists($sTemplatePath)) {
            return $this->Viewer_Fetch($sTemplatePath);
        }
    }
}
?>