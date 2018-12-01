module.exports = {
    getURL: function(getURL){
        var queryId = "topic"; // default
        if (getURL.query.id != undefined){
            queryId = getURL.query.id;
        }
        return queryId;
    }
};
