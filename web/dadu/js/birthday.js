// ----------------- 年月日自動計算 -----------------
$(document).ready(function () {
 var i = -1;
 // 新增年份，從1910年開始
 for (i = 1910; i <= new Date().getFullYear(); i++) {
  addOption(birth_year, i, i - 1909);
  /*// 預設選中1988年
     if (i == 1988) {
      birth_year.options[i-1910].selected = true;
     }*/
 }
 // 新增月份
 for (i = 1; i <= 12; i++) {
  addOption(birth_month, i, i);
 }
 // 新增天份，先預設31天
 for (i = 1; i <= 31; i++) {
  addOption(birth_day, i, i);
 }

 //$("#birth_month"). birth_year  birth_day
});


  // 設定每個月份的天數
  function setDays(year, month, day) {
   var monthDays = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
   var yea = year.options[year.selectedIndex].text;
   var mon = month.options[month.selectedIndex].text;
   var num = monthDays[mon - 1];
   if (mon == 2 && isLeapYear(yea)) {
num++;
   }
   for (var j = day.options.length - 1; j >= num; j--) {
day.remove(j);
   }
   for (var i = day.options.length; i <= num; i++) {
addOption(birth_day, i, i);
   }
  }

  // 判斷是否閏年
  function isLeapYear(year) {
   return (year % 4 == 0 || (year % 100 == 0 && year % 400 == 0));
  }

  // 向select尾部新增option
  function addOption(selectbox, text, value) {
   var option = document.createElement("option");
   option.text = text;
   option.value = value;
   selectbox.options.add(option);
  }

