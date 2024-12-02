<?php

defined('BASEPATH') || exit('No direct script access allowed');

// connect account
$lang['whatsbot'] = 'WhatsBot';
$lang['connect_account'] = 'Connectar compte';
$lang['connect_whatsapp_business'] = 'Connectar WhatsApp Business';
$lang['campaigning'] = 'Campanyes';
$lang['business_account_id_description'] = 'El vostre ID de compte de WhatsApp Business (WABA)';
$lang['access_token_description'] = 'El vostre token d\'accés d\'usuari després de registrar-vos al portal de desenvolupadors de Facebook';
$lang['whatsapp_business_account_id'] = 'ID de compte de WhatsApp Business';
$lang['whatsapp_access_token'] = 'Token d\'accés de WhatsApp';
$lang['webhook_callback_url'] = 'URL de callback del webhook';
$lang['verify_token'] = 'Token de verificació';
$lang['connect'] = 'Connectar';
$lang['whatsapp'] = 'WhatsApp';
$lang['one_click_account_connection'] = 'Connexió d\'un clic al compte';
$lang['connect_your_whatsapp_account'] = 'Connecta el vostre compte de WhatsApp';
$lang['copy'] = 'Copia';
$lang['copied'] = 'Copiat!!';
$lang['disconnect'] = 'Desconnectar';
$lang['number'] = 'Número';
$lang['number_id'] = 'ID de número';
$lang['quality'] = 'Qualitat';
$lang['status'] = 'Estat';
$lang['business_account_id'] = 'ID de compte de negoci';
$lang['permissions'] = 'Permisos';
$lang['phone_number_id_description'] = 'ID del número de telèfon connectat a l\'API de WhatsApp Business. Si no esteu segur, podeu utilitzar una sol·licitud GET Phone Number ID per recuperar-lo de l\'API de WhatsApp ( https://developers.facebook.com/docs/whatsapp/business-management-api/manage-phone-numbers )';
$lang['phone_number_id'] = 'ID de número del telèfon registrat a WhatsApp';
$lang['update_details'] = 'Actualitzar detalls';

$lang['bots'] = 'Bots';
$lang['bots_management'] = 'Gestió de bots';
$lang['create_template_base_bot'] = 'Crear bot base de plantilla';
$lang['create_message_bot'] = 'Crear bot de missatges';
$lang['type'] = 'Tipus';
$lang['message_bot'] = 'Bot de missatges';
$lang['new_template_bot'] = 'Nou bot de plantilla';
$lang['new_message_bot'] = 'Nou bot de missatges';
$lang['bot_name'] = 'Nom del bot';
$lang['reply_text'] = 'Text de resposta <i class="fa-regular fa-circle-question pull-left tw-mt-0.5 tw-mr-1" data-toggle="tooltip" data-title="Text que s\'enviarà al lead o contacte. També podeu utilitzar {companyname}, {crm_url} o qualsevol altre camp personalitzat de fusió del lead o contacte, o utilitzar el signe \'@\' per trobar camps de fusió disponibles" data-placement="bottom"></i> <span class="text-muted">(El nombre màxim de caràcters permesos ha de ser 1024)</span>';
$lang['reply_type'] = 'Tipus de resposta';
$lang['trigger'] = 'Disparador';
$lang['header'] = 'Capçalera';
$lang['footer_bot'] = 'Peu <i class="fa-regular fa-circle-question pull-left tw-mt-0.5 tw-mr-1" data-toggle="tooltip" data-title="El nombre màxim de caràcters permesos ha de ser 60" data-placement="bottom"></i>';
$lang['bot_with_reply_buttons'] = 'Opció 1: Bot amb botons de resposta';
$lang['bot_with_button_link'] = 'Opció 2: Bot amb enllaç de botó - URL de CTA';
$lang['button1'] = 'Botó1 <i class="fa-regular fa-circle-question pull-left tw-mt-0.5 tw-mr-1" data-toggle="tooltip" data-title="El nombre màxim de caràcters permesos ha de ser 20" data-placement="bottom"></i>';
$lang['button1_id'] = 'ID del botó1 <i class="fa-regular fa-circle-question pull-left tw-mt-0.5 tw-mr-1" data-toggle="tooltip" data-title="El nombre màxim de caràcters permesos ha de ser 256" data-placement="bottom"></i>';
$lang['button2'] = 'Botó2 <i class="fa-regular fa-circle-question pull-left tw-mt-0.5 tw-mr-1" data-toggle="tooltip" data-title="El nombre màxim de caràcters permesos ha de ser 20" data-placement="bottom"></i>';
$lang['button2_id'] = 'ID del botó2 <i class="fa-regular fa-circle-question pull-left tw-mt-0.5 tw-mr-1" data-toggle="tooltip" data-title="El nombre màxim de caràcters permesos ha de ser 256" data-placement="bottom"></i>';
$lang['button3'] = 'Botó3 <i class="fa-regular fa-circle-question pull-left tw-mt-0.5 tw-mr-1" data-toggle="tooltip" data-title="El nombre màxim de caràcters permesos ha de ser 20" data-placement="bottom"></i>';
$lang['button3_id'] = 'ID del botó3 <i class="fa-regular fa-circle-question pull-left tw-mt-0.5 tw-mr-1" data-toggle="tooltip" data-title="El nombre màxim de caràcters permesos ha de ser 256" data-placement="bottom"></i>';
$lang['button_name'] = 'Nom del botó <i class="fa-regular fa-circle-question pull-left tw-mt-0.5 tw-mr-1" data-toggle="tooltip" data-title="El nombre màxim de caràcters permesos ha de ser 20" data-placement="bottom"></i>';
$lang['button_link'] = 'Enllaç del botó';
$lang['enter_name'] = 'Introduïu el nom';
$lang['select_reply_type'] = 'Seleccioneu el tipus de resposta';
$lang['enter_bot_reply_trigger'] = 'Introduïu el disparador de resposta del bot';
$lang['enter_header'] = 'Introduïu la capçalera';
$lang['enter_footer'] = 'Introduïu el peu';
$lang['enter_button1'] = 'Introduïu el botó1';
$lang['enter_button1_id'] = 'Introduïu l\'ID del botó1';
$lang['enter_button2'] = 'Introduïu el botó2';
$lang['enter_button2_id'] = 'Introduïu l\'ID del botó2';
$lang['enter_button3'] = 'Introduïu el botó3';
$lang['enter_button3_id'] = 'Introduïu l\'ID del botó3';
$lang['enter_button_name'] = 'Introduïu el nom del botó';
$lang['enter_button_url'] = 'Introduïu la URL del botó';
$lang['on_exact_match'] = 'Bot de resposta: En coincidència exacta';
$lang['when_message_contains'] = 'Bot de resposta: Quan el missatge conté';
$lang['when_client_send_the_first_message'] = 'Resposta de benvinguda - quan el lead o client envia el primer missatge';
$lang['bot_create_successfully'] = 'Bot creat amb èxit';
$lang['bot_update_successfully'] = 'Bot actualitzat amb èxit';
$lang['bot_deleted_successfully'] = 'Bot eliminat amb èxit';
$lang['templates'] = 'Plantilles';
$lang['template_data_loaded'] = 'Plantilles carregades amb èxit';
$lang['load_templates'] = 'Carregar plantilles';
$lang['template_management'] = 'Gestió de plantilles';


$lang['campaign'] = 'Campanya';
$lang['campaigns'] = 'Campanyes';
$lang['send_new_campaign'] = 'Enviar nova campanya';
$lang['campaign_name'] = 'Nom de la campanya';
$lang['template'] = 'Plantilla';
$lang['scheduled_send_time'] = '<i class="fa-regular fa-circle-question pull-left tw-mt-0.5 tw-mr-1" data-toggle="tooltip" data-title="Per client, basat en la zona horària de contacte" data-placement="left"></i>Hora programada d\'enviament';
$lang['scheduled_time_description'] = 'Per client, basat en la zona horària de contacte';
$lang['ignore_scheduled_time_and_send_now'] = 'Ignorar l\'hora programada i enviar ara';
$lang['template'] = 'Plantilla';
$lang['leads'] = 'Clients potencials';
$lang['delivered_to'] = 'Enviat a';
$lang['read_by'] = 'Llegit per';
$lang['variables'] = 'Variables';
$lang['body'] = 'Cos';
$lang['variable'] = 'Variable';
$lang['match_with_selected_field'] = 'Coincidir amb un camp seleccionat';
$lang['preview'] = 'Previsualització';
$lang['send_campaign'] = 'Enviar campanya';
$lang['send_to'] = 'Enviar a';
$lang['send_campaign'] = 'Enviar campanya';
$lang['view_campaign'] = 'Veure campanya';
$lang['campaign_daily_task'] = 'Tasques diàries de campanya';
$lang['back'] = 'Enrere';
$lang['phone'] = 'Telèfon';
$lang['message'] = 'Missatge';
$lang['currently_type_not_supported'] = 'Actualment <strong> %s </strong> el tipus de plantilla no és compatible!';
$lang['of_your'] = 'del teu ';
$lang['contacts'] = 'Contactes';
$lang['select_all_leads'] = 'Seleccionar tots els clients potencials';
$lang['select_all_note_leads'] = 'Si selecciones això, tots els futurs clients potencials s\'inclouran en aquesta campanya.';
$lang['select_all_note_contacts'] = 'Si selecciones això, tots els futurs contactes s\'inclouran en aquesta campanya.';

$lang['verified_name'] = 'Nom verificat';
$lang['mark_as_default'] = 'Marcar com a predeterminat';
$lang['default_number_updated'] = 'ID del número de telèfon predeterminat actualitzat amb èxit';
$lang['currently_using_this_number'] = 'Actualment utilitzant aquest número';
$lang['leads'] = 'Clients potencials';
$lang['pause_campaign'] = 'Pausar campanya';
$lang['resume_campaign'] = 'Reprendre campanya';
$lang['campaign_resumed'] = 'Campanya represa';
$lang['campaign_paused'] = 'Campanya pausada';

//Template
$lang['body_data'] = 'Dades del cos';
$lang['category'] = 'Categoria';

// Template bot
$lang['create_new_template_bot'] = 'Crear un nou bot de plantilla';
$lang['template_bot'] = 'Bot de plantilla';
$lang['variables'] = 'Variables';
$lang['preview'] = 'Previsualització';
$lang['template'] = 'Plantilla';
$lang['bot_content_1'] = 'Aquest missatge s\'enviarà al contacte un cop es compleixi la regla de desencadenament en el missatge enviat pel contacte.';
$lang['save_bot'] = 'Desar bot';
$lang['please_select_template'] = 'Si us plau, selecciona una plantilla';
$lang['use_manually_define_value'] = 'Utilitzar valor definit manualment';
$lang['merge_fields'] = 'Camp de fusió';
$lang['template_bot_create_successfully'] = 'Bot de plantilla creat amb èxit';
$lang['template_bot_update_successfully'] = 'Bot de plantilla actualitzat amb èxit';
$lang['text_bot'] = 'Bot de text';
$lang['option_2_bot_with_link'] = 'Opció 2: Bot amb botó d\'enllaç - URL d\'acció (CTA)';
$lang['option_3_file'] = 'Opció 3: Bot amb fitxer';
// Bot settings
$lang['bot'] = 'Bot';
$lang['bot_delay_response'] = 'Missatge enviat quan s\'espera un retard en la resposta';
$lang['bot_delay_response_placeholder'] = 'Dona\'m un moment, tindré la resposta aviat';

$lang['whatsbot'] = 'WhatsBot';

//campaigns
$lang['relation_type'] = 'Tipus de relació';
$lang['select_all'] = 'Seleccionar tots';
$lang['total'] = 'Total';
$lang['merge_field_note'] = 'Utilitza el signe \'@\' per afegir camps de fusió.';
$lang['send_to_all'] = 'Enviar a tots ';
$lang['or'] = 'O';

$lang['convert_whatsapp_message_to_lead'] = 'Adquirir nou client potencial automàticament (convertir nous missatges de whatsapp en client potencial)';
$lang['leads_status'] = 'Estat del client potencial';
$lang['leads_assigned'] = 'Client potencial assignat';
$lang['whatsapp_auto_lead'] = 'Whatsapp Auto Lead';
$lang['webhooks_label'] = 'Les dades rebudes de Whatsapp seran reenviades a';
$lang['webhooks'] = 'WebHooks';
$lang['enable_webhooks'] = 'Habilitar reenvio de WebHooks';
$lang['chat'] = 'Xat';
$lang['black_listed_phone_numbers'] = 'Números de telèfon en llista negra';
$lang['sent_status'] = 'Estat enviat';

$lang['active'] = 'Actiu';
$lang['approved'] = 'Aprovat';
$lang['this_month'] = 'aquest mes';
$lang['open_chats'] = 'Xats oberts';
$lang['resolved_conversations'] = 'Converses resoltes';
$lang['messages_sent'] = 'Missatges enviats';
$lang['account_connected'] = 'Compte connectat';
$lang['account_disconnected'] = 'Compte desconnectat';
$lang['webhook_verify_token'] = 'Token de verificació del webhook';
// Chat integration
$lang['chat_message_note'] = 'El missatge s\'enviarà aviat. Tingueu en compte que si és un nou contacte, no apareixerà en aquesta llista fins que el contacte comenci a interactuar amb vosaltres!';

$lang['activity_log'] = 'Registre d\'activitat';
$lang['whatsapp_logs'] = 'Registres de Whatsapp';
$lang['response_code'] = 'Codi de resposta';
$lang['recorded_on'] = 'Registrat el';

$lang['request_details'] = 'Detalls de la sol·licitud';
$lang['raw_content'] = 'Contingut en brut';
$lang['headers'] = 'Caps';
$lang['format_type'] = 'Tipus de format';

// Permission section
$lang['show_campaign'] = 'Mostrar campanya';
$lang['clear_log'] = 'Esborrar registre';
$lang['log_activity'] = 'Registrar activitat';
$lang['load_template'] = 'Carregar plantilla';

$lang['action'] = 'Acció';
$lang['total_parameters'] = 'Paràmetres totals';
$lang['template_name'] = 'Nom de la plantilla';
$lang['log_cleared_successfully'] = 'Registre esborrat amb èxit';
$lang['whatsbot_stats'] = 'Estadístiques de WhatsBot';

$lang['not_found_or_deleted'] = 'No trobat o esborrat';
$lang['response'] = 'Resposta';

$lang['select_image'] = 'Seleccionar imatge';
$lang['image'] = 'Imatge';
$lang['image_deleted_successfully'] = 'Imatge esborrada amb èxit';
$lang['whatsbot_settings'] = 'Configuració de Whatsbot';
$lang['maximum_file_size_should_be'] = 'La mida màxima del fitxer hauria de ser ';
$lang['allowed_file_types'] = 'Tipus de fitxers permesos: ';

$lang['send_image'] = 'Enviar imatge';
$lang['send_video'] = 'Enviar vídeo';
$lang['send_document'] = 'Enviar document';
$lang['record_audio'] = 'Gravar àudio';
$lang['chat_media_info'] = 'Més informació sobre els tipus de contingut compatibles i la mida del mitjà de postprocessament';
$lang['help'] = 'Ajuda';

// v1.1.0
$lang['clone'] = 'Clonar';
$lang['bot_clone_successfully'] = 'Bot clonado amb èxit';
$lang['all_chat'] = 'Tots els xats';
$lang['from'] = 'De:';
$lang['phone_no'] = 'Telèfon:';
$lang['supportagent'] = 'Agent de suport';
$lang['assign_chat_permission_to_support_agent'] = 'Assignar permís de xat només a l\'agent de suport';
$lang['enable_whatsapp_notification_sound'] = 'Habilitar so de notificació de xat de whatsapp';
$lang['notification_sound'] = 'So de notificació';
$lang['trigger_keyword'] = 'Paraula clau de desencadenament';
$lang['modal_title'] = 'Seleccionar agent de suport';
$lang['close_btn'] = 'Tancar';
$lang['save_btn'] = 'Desar';
$lang['support_agent'] = 'Agent de suport';
$lang['change_support_agent'] = 'Canviar agent de suport';
$lang['replay_message'] = 'No pots enviar missatges després de 24 hores.';
$lang['support_agent_note'] = '<strong>Nota: </strong> Quan habilites la funció d\'agent de suport, l\'assignat al client potencial es assignarà automàticament al xat. Els administradors també poden assignar un nou agent des de la pàgina de xat.';
$lang['permission_bot_clone'] = 'Clonar Bot';
$lang['remove_chat'] = 'Eliminar xat';
$lang['default_message_on_no_match'] = 'Resposta per defecte - si no coincideix cap paraula clau';
$lang['default_message_note'] = '<strong>Nota: </strong>Habilitar aquesta opció augmentarà la càrrega del teu webhook. Per obtenir més informació, visita aquest <a href="https://docs.corbitaltech.dev/products/whatsbot/index.html" target="_blank">enllaç</a>.';

$lang['whatsbot_connect_account'] = 'Connectar compte de Whatsbot';
$lang['whatsbot_message_bot'] = 'Bot de missatges de Whatsbot';
$lang['whatsbot_template_bot'] = 'Bot de plantilla de Whatsbot';
$lang['whatsbot_template'] = 'Plantilla de Whatsbot';
$lang['whatsbot_campaigns'] = 'Campanyes de Whatsbot';
$lang['whatsbot_chat'] = 'Xat de Whatsbot';
$lang['whatsbot_log_activity'] = 'Registrar activitat de Whatsbot';
$lang['message_templates_not_exists_note'] = 'Permís de plantilla meta mancant. Si us plau, habilita-ho al teu compte Meta';

// v1.2.0
$lang['ai_prompt'] = 'Indicacions AI';
$lang['ai_prompt_note'] = 'Per a indicacions AI, si us plau, introdueix un missatge per habilitar la funció o utilitza indicacions AI si ja està habilitada';
$lang['emojis'] = 'Emojis';
$lang['translate'] = 'Tradueix';
$lang['change_tone'] = 'Canviar to';
$lang['professional'] = 'Professional';
$lang['friendly'] = 'Amistós';
$lang['empathetic'] = 'Empàtic';
$lang['straightforward'] = 'Directe';
$lang['simplify_language'] = 'Simplificar llenguatge';
$lang['fix_spelling_and_grammar'] = 'Corregir ortografia i gramàtica';

$lang['ai_integration'] = 'Integració AI';
$lang['open_ai_api'] = 'API OpenAI';
$lang['open_ai_secret_key'] = 'Clau secreta d\'OpenAI - <a href="https://platform.openai.com/account/api-keys" target="_blank">On pots trobar la clau secreta?</a>';
$lang['chat_text_limit'] = 'Límit de text del xat';
$lang['chat_text_limit_note'] = 'Per optimitzar els costos operatius, considera limitar el nombre de paraules de les respostes del xat d\'OpenAI';
$lang['chat_model'] = 'Model de xat';
$lang['openai_organizations'] = 'Organitzacions d\'OpenAi';
$lang['template_type'] = 'Tipus de plantilla';
$lang['update'] = 'Actualitzar';
$lang['open_ai_key_verification_fail'] = 'La verificació de la clau OpenAi està pendent de la configuració, si us plau connecta el teu compte d\'openai';
$lang['enable_wb_openai'] = 'Habilitar OpenAI al xat';
$lang['webhook_resend_method'] = 'Mètode de reenvio del webhook';
$lang['search_language'] = 'Cerca llenguatge...';
$lang['document'] = 'Document';
$lang['select_document'] = 'Seleccionar document';
$lang['attchment_deleted_successfully'] = 'Adjunt esborrat amb èxit';
$lang['attach_image_video_docs'] = 'Adjuntar imatge, vídeo, documents';
$lang['choose_file_type'] = 'Escollir tipus de fitxer';
$lang['max_size'] = 'Mida màxima: ';
// v1.3.0

// CSV import
$lang['bulk_campaigns']  = 'Campanyes a l\'engròs';
$lang['upload_csv'] = 'Carregar CSV';
$lang['upload'] = 'Carregar';
$lang['csv_uploaded_successfully'] = 'Fitxer CSV carregat amb èxit';
$lang['please_select_file'] = 'Si us plau, selecciona el fitxer CSV';
$lang['phonenumber_field_is_required'] = 'El camp del número de telèfon és obligatori';
$lang['out_of_the'] = 'D\'un total de';
$lang['records_in_your_csv_file'] = 'registres al teu fitxer CSV,';
$lang['valid_the_campaign_can_be_sent'] = 'registres són vàlids.<br /> La campanya es pot enviar amb èxit a aquests';
$lang['users'] = 'usuaris';
$lang['campaigns_from_csv_file'] = 'Campanyes del fitxer CSV';
$lang['download_sample'] = 'Descarregar mostra';
$lang['csv_rule_1'] = '1. <b>Requisit de columna de número de telèfon:</b> El teu fitxer CSV ha d\'incloure una columna anomenada "Phoneno". Cada registre d\'aquesta columna ha de contenir un número de contacte vàlid, format correctament amb el codi de país, incloent el signe "+".<br /><br />';
$lang['csv_rule_2'] = '2. <b>Format i codificació del CSV:</b> Les dades del teu CSV han de seguir el format especificat. La primera fila del teu fitxer CSV ha de contenir els encapçalaments de columna, tal com es mostra a la taula d\'exemple. Assegura\'t que el teu fitxer estigui codificat en UTF-8 per evitar problemes de codificació.';
$lang['please_upload_valid_csv_file'] = 'Si us plau, carrega un fitxer CSV vàlid';
$lang['please_add_valid_number_in_csv_file'] = 'Si us plau, afegeix un <b>Phoneno</b> vàlid al fitxer CSV';
$lang['total_send_campaign_list'] = 'Total de campanyes enviades: %s';
$lang['sample_data'] = 'Dades d\'exemple';
$lang['firstname'] = 'Nom';
$lang['lastname'] = 'Cognom';
$lang['phoneno'] = 'Número de telèfon';
$lang['email'] = 'Correu electrònic';
$lang['country'] = 'País';
$lang['download_sample_and_read_rules'] = 'Descarrega el fitxer d\'exemple i llegeix les regles';
$lang['please_wait_your_request_in_process'] = 'Si us plau, espera, la teva sol·licitud s\'està processant.';
$lang['whatsbot_bulk_campaign'] = 'Campanyes a l\'engròs de Whatsbot';
$lang['csv_campaign'] = 'Campanya CSV';

// Canned reply
$lang['canned_reply'] = 'Resposta predefinida';
$lang['canned_reply_menu'] = 'Resposta predefinida';
$lang['create_canned_reply'] = 'Crear resposta predefinida';
$lang['title'] = 'Títol';
$lang['desc'] = 'Descripció';
$lang['public'] = 'Públic';
$lang['action'] = 'Acció';
$lang['delete_successfully'] = 'Resposta esborrada.';
$lang['cannot_delete'] = 'No es pot esborrar la resposta.';
$lang['whatsbot_canned_reply'] = 'Resposta predefinida de Whatsbot';
$lang['reply'] = 'Resposta';

// AI Prompts
$lang['ai_prompts'] = 'Indicacions AI';
$lang['create_ai_prompts'] = 'Crear indicacions AI';
$lang['name'] = 'Nom';
$lang['action'] = 'Acció';
$lang['prompt_name'] = 'Nom de la indicació';
$lang['prompt_action'] = 'Acció de la indicació';
$lang['whatsbot_ai_prompts'] = 'Indicacions AI de Whatsbot';

// New chat
$lang['replying_to'] = 'Responent a:';
$lang['download_document'] = 'Descarregar document';
$lang['custom_prompt'] = 'Indicació personalitzada';
$lang['canned_replies'] = 'Respostes predefinides';
$lang['use_@_to_add_merge_fields'] = 'Utilitza \'@\' per afegir camps de fusió';
$lang['type_your_message'] = 'Escriu el teu missatge';
$lang['you_cannot_send_a_message_using_this_number'] = 'No pots enviar un missatge utilitzant aquest número.';

// Bot flow
$lang['bot_flow'] = 'Flux del bot';
$lang['create_new_flow'] = 'Crear nou flux';
$lang['flow_name'] = 'Nom del flux';
$lang['flow'] = 'Flux';
$lang['bot_flow_builder'] = 'Constructor de flux del bot';
$lang['you_can_not_upload_file_type'] = 'No pots pujar fitxers de tipus <b> %s </b>';
$lang['whatsbot_bot_flow'] = 'Flux del bot de Whatsbot';

// v1.3.2
$lang['auto_clear_chat_history'] = 'Esborrat automàtic de l\'historial de xat';
$lang['enable_auto_clear_chat_history'] = 'Habilitar esborrat automàtic de l\'historial de xat';
$lang['auto_clear_time'] = 'Temps d\'esborrat automàtic de l\'historial';
$lang['clear_chat_history_note'] = '<strong>Nota: </strong> Si habilites la funció d\'esborrat automàtic de l\'historial de xat, s\'esborraran automàticament les converses d\'historial en funció del nombre de dies que especifiques, cada vegada que s\'executi la tasca cron.';
$lang['source'] = 'Font';
$lang['groups'] = 'Grups';

// v1.3.3
$lang['click_user_to_chat'] = 'Feu clic a l\'usuari per xatejar';
$lang['searching'] = 'Cercant...';
$lang['filters'] = 'Filtres';
$lang['relation_type'] = 'Tipus de relació';
$lang['groups'] = 'Grups';
$lang['source'] = 'Font';
$lang['status'] = 'Estat';
$lang['select_type'] = 'Seleccioneu tipus';
$lang['select_agents'] = 'Seleccioneu agents';
$lang['select_group'] = 'Seleccioneu grup';
$lang['select_source'] = 'Seleccioneu font';
$lang['select_status'] = 'Seleccioneu estat';
$lang['agents'] = 'Agents';

// v1.4.2
$lang['read_only'] = 'Només lectura';
