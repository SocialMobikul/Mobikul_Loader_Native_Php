const baseUrl = '/_native/api/call';

async function bridgeCall(method, params = {}) {
  const response = await fetch(baseUrl, {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({ method, params })
  });

  return response.json();
}

export async function show(options = {}) {
  return bridgeCall('MobikulLoader.Show', options);
}

export async function hide(options = {}) {
  return bridgeCall('MobikulLoader.Hide', options);
}
