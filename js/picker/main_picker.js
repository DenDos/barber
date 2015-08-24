$(document).ready(function() {

    var $input_date= $('.datepicker').pickadate({
        monthsFull: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
        weekdaysFull: ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'],
        monthsShort: ['Января', 'Февраля', 'Марта', 'Апреля', 'Мая', 'Июня', 'Июля', 'Августа', 'Сентбяря', 'Октября', 'Ноября', 'Декабря'],
        today: 'Сегодня',
        clear: 'Очистить',
        close: 'Закрыть',
        format: 'Дата запииси: dddd, dd mmm, yyyy',
        formatSubmit: 'yyyy/mm/dd'

    });


    var $input_time= $('.timepicker').pickatime({
        interval: 15,
        clear: 'Стереть',
        format: 'Время записи: HH:i',
        formatSubmit: 'HH:i',

        hiddenPrefix: 'prefix__',
        hiddenSuffix: '__suffix',
        min: [8,30],
        max: [18,0]
    });
    var picker = $input_time.pickatime('picker');
    var arr = [[9,30],[12,30]];
    picker.set('disable', arr );

});