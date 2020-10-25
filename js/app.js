var vm = new Vue({
    el: "#app",

    data: {
        show: true,
        isDisabled: true,
        mailShow: false,
        nameShow: false,
        name: "",
        mail: "",
        nameOk: false,
        mailOk: false,
        triCateg: false,
        tri: false,
    },
    methods: {
        clear: function () {
            this.name = "";
            this.firstName = "";
            this.mail = "";
            this.tel = "";
        },

        isAName: function (txt) {
            if (isNaN(txt) && txt != null) {
                this.nameShow = false;
                this.nameOk = true;
            } else {
                this.nameShow = true;
                this.nameOk = false;
            }
            this.verifForm();
        },
        isAMail: function (mail) {
            if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(mail) && mail != "") {
                this.mailShow = false;
                this.mailOk = true;
            } else {
                this.mailShow = true;
                this.mailOk = false;
            }
            this.verifForm();
        },
        verifForm: function () {
            if (this.nameOk && this.mailOk) {
                console.log("retour ok");
                this.isDisabled = false;
            } else {
                console.log("retour nul");
                this.isDisabled = true;
            }
        },

    }

});