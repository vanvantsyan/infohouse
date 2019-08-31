export default {
  methods: {
    /**
     * @param {*} source
     * @return {String}
     */
    toFormDatetime(source) {
      return source
        ? moment(source).format('YYYY-MM-DD HH:mm:ss')
        : source;
    },
  },
}