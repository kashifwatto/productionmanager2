$(document).ready(function () {
    $("#kt_daterangepicker_1").daterangepicker({
      opens: "right",
      locale: {
        format: "MMM DD",
      },
      startDate: moment().startOf("month"),
      endDate: moment().endOf("month"),

      autoApply: true,
    });
    $("#kt_daterangepicker_2").daterangepicker({
      opens: "right",
      locale: {
        format: "MMM DD",
      },
      startDate: moment().startOf("month"),
      endDate: moment().endOf("month"),

      autoApply: true,
    });




  });
  
