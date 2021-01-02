export function getUsername(state) {
    if (state.username) {
        return;
    }

    axios.post('/login-rpc/check').then(response => {
        state.username = response.data.username;
    });
}
