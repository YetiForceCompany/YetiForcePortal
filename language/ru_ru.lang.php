<?php
/*+***********************************************************************************************************************************
 * The contents of this file are subject to the YetiForce Public License Version 1.1 (the "License"); you may not use this file except
 * in compliance with the License.
 * Software distributed under the License is distributed on an "AS IS" basis, WITHOUT WARRANTY OF ANY KIND, either express or implied.
 * See the License for the specific language governing rights and limitations under the License.
 * The Original Code is YetiForce.
 * The Initial Developer of the Original Code is YetiForce. Portions created by YetiForce are Copyright (C) www.yetiforce.com. 
 * All Rights Reserved.
 * Contributor(s): 
 *************************************************************************************************************************************/
global $app_strings;
$app_strings = Array(
//Main
'LBL_CUSTOMER_PORTAL'=>'Клиентский Портал',
'LBL_NAVBAR_TITLE'=>'YetiForce - Клиентский Портал',
'LBL_CLOSE' => 'Закрыть',

//Menu
'LBL_TOGGLE_NAVIGATION' => 'Переключатель меню',
'LBL_BTN_LNK_LOGOUT'=>'Выход',
'LBL_HOME'=>'Главная',
'LBL_DASHBOARD'=>'Главная',

//Login
'LBL_SIGN_IN_TITLE'=>'Авторизация',
'LBL_LOGIN'=>'E-Mail',
'LBL_PASSWORD'=>'Пароль',
'LBL_SIGN_IN' => 'Войти',
'LBL_FORGOT_LOGIN'=>'Забыли пароль?',
'LBL_RESET_PASSWORD' => 'Password reset',
'LBL_EMAIL'=>'E-Mail',
'LBL_LNK_HOME'=>'Назад',
'LBL_SEND_PASSWORD'=>'Отправить пароль',
'LBL_FORGOT_PASSWORD' => 'Forgot your password?',

//Changing the password
'LBL_CHANGING_PASSWORD' => 'Изменить пароль',
'LBL_OLD_PASSWORD'=>'Старый пароль',
'LBL_NEW_PASSWORD'=>'Новый пароль',
'LBL_CONFIRM_PASSWORD'=>'Повтор пароля',
'LBL_BTN_CHANGE_PASSWORD' => 'Изменить пароль',
	'LBL_INVALID_USERNAME_OR_PASSWORD' => 'Invalid password or username.',
'LBL_ENTER_NEW_PASSWORDS_SAME' => 'Пароли не совпадают',
'LBL_PASSWORD_CHANGED'=>'Пароль успешно изменен.',
    
    
//forgot the password
'LBL_PASSWORD_HAS_BEEN_SENT' => 'Your password has been sent, please check your emails.',
'LBL_NO_MAIL_ADDRESS' => 'No email address has been entered.',
'LBL_EMAIL_ADDRESS_NOT_FOUND' => 'Email address not found',
'LBL_LOGIN_REVOKED' => 'Account access has been blocked',
'LBL_MAIL_COULDNOT_SENT' => 'Email could not be sent, contact your administrator to solve the configuration problem in your mailbox.',


//List
'LBL_NO_RECORDS_FOUND' => 'Записи не найдены',
'LBL_NO_HELPDESK_RECORDS_FOUND' => 'Нет Заявок',
'LBL_NEW_TICKET'=>'Добавить Заявку',
'LBL_NEW_TICKET_TITLE'=>'Заголовок',
'LBL_TICKET_DETAIL'=>'Описание',
'LBL_HELPDESK_TITLE'=>'Заголовок',
'LBL_HELPDESK_TITLE_HOLDER'=>'Введите заголовок Заявки',
'LBL_HELPDESK_SEVERITY'=>'Сложность',
'LBL_HELPDESK_CATEGORY'=>'Категория',
'LBL_HELPDESK_CONTRACT_SERVICE'=>'Сервисный Контракт',
'LBL_HELPDESK_PRIORITY'=>'Приоритет',
'LBL_HELPDESK_DESCRIPTION'=>'Описание',

'LBL_FAQ_CATEGORIES'=>'Категории',
'LBL_NO_FAQ_RECORDS_FOUND' => 'Нет ЧаВо',
'LBL_FAQ_ANSWER'=>'Ответить',
'LBL_FAQ_RELATED_PRODUCT'=>'Товар',
'LBL_FAQ_ATTACHMENTS'=>'Вложение',

'LBL_PRODUCTS_RELATED_PRODUCTS'=>'Связанные Товары',
'LBL_PRODUCTS_RELATED_QUOTES'=>'Товары, связанные с Предложением',
'LBL_PRODUCTS_RELATED_INVOICES'=>'Товары, связанные со Счетом',
'LBL_SERVICES_RELATED_SERVICES'=>'Связанные Услуги',
'LBL_SERVICES_RELATED_QUOTES'=>'Услуги, связанные с Предложением',
'LBL_SERVICES_RELATED_INVOICES'=>'Услуги, связанные со Счетом',

'LBL_RECORDS_PER_PAGE'=>'Записей на странице _MENU_',
'LBL_SHOWING_PAGE'=>'Страница _PAGE_ из _PAGES_',
'LBL_NOTHING_FOUND'=>'Нет записей',
'LBL_FILTERED_TOTAL_RECORDS'=>'Количество записей _MAX_',
'LBL_PROCESSING'=>'Пожалуйста, подождите...',
'LBL_SEARCH'=>'Поиск',
'LBL_FIRST'=>'В начало',
'LBL_PREVIOUS'=>'Назад',
'LBL_NEXT'=>'Вперед',
'LBL_LAST'=>'В конец',

//Detail
'LBL_HELPDESK_STATUS'=>'Статус Заявки',
'LBL_HELPDESK_CLOSE_TICKET'=>'Закрыть Заявку',
'LBL_HELPDESK_ATTACHMENTS'=>'Вложение',
'LBL_HELPDESK_UPLOAD'=>'Отправить',
'LBL_HELPDESK_COMMENTS'=>'Комментарии',
'LBL_HELPDESK_SEND_COMMENT'=>'Опубликовать',
'LBL_HELPDESK_DOWNLOAD_ATTACHMENTS'=>'Загрузить',

'LBL_PROJECT_RELATED_TICKETS'=>'Связанные Заявки', 
'LBL_PROJECT_RELATED_PROJECTTASK'=>'Связанные Проектные задачи',
'LBL_PROJECT_RELATED_PROJECTMILESTONE'=>'Связанные Контрольные точки',

'LBL_INVENTORY_PRODUCTS'=>'Товары и Услуги',
'LBL_INVENTORY_NAME'=>'Наименование',
'LBL_INVENTORY_QTY'=>'Количество',
'LBL_INVENTORY_LISTPRICE'=>'Прайс-Лист',
'LBL_INVENTORY_NETPRICE'=>'Розничный Прайс-Лист',
'LBL_INVENTORY_TAX'=>'Налоги',

'LBL_NOTSET_UPLOAD_DIR' => 'Не установлена папка для временных файлов "upload_dir"',
'LBL_UPLOAD_FILE_LARGE'=>'Загружаемый файл, слишком большой',
'LBL_PROBLEM_UPLOAD'=>'Ошибка загрузки файла',
'LBL_FILE_HAS_NO_CONTENTS'=>'Файл не имеет содержимого',

//Widgets
'LBL_WIDGET_OPENTICKETS' => 'Открытые Заявки',
'LBL_WIDGET_TICKETSBYSTATUS' => 'Заявки по статусу',
'LBL_WIDGET_TICKETSSUMTIME' => 'Заявки - Время обработки - Пользователь',
'LBL_WIDGET_PROJECTSUMTIME' => 'Проект - Время обработки - Проект',
'The Email you Request is not in our system!' => 'E-Mail не зарегистрирован в системе',
'We have send an Email containing your Password at the requested Address!' => 'Сообщение с паролем успешно отправлено!',
);