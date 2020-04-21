
<script>
    import numeral from "numeral";
    Vue.filter("formatNumber", function (value) {
        return numeral(value).format("0,0"); // displaying other groupings/separators is possible, look at the docs
    });
    export default{
        data: function() {
            return {
                invest: 500,
                profit: '',
                month: '',
            }
        },

        computed: {
            cal_interest() {
                return  this.profit = this.invest * 0.25;
            },

            cal_month() {
                return this.profit / 6
            }
        },
         filters: {

         }

    }
</script>
