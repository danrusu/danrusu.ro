(async () => {

    const response = await fetch(
        'https://restful-booker.herokuapp.com/booking/1',
        {         
            method: "GET",

            headers: {
                'Accept': 'application/json'
            }
        }
    );

    console.log(await response.json());
})();